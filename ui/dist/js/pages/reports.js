/**
 * IOT PORTAL 1.0.0
 * ------------------
 * Description:
 *      This is a js file used only for the reporting cards.
 */
// --- add this helper at very top ---
(function(){
  // Expose appsbase from serverside template if present
  var BASE = (window.APP_BASE || '');

  // Shim toastr if not loaded
  window.toastr = window.toastr || {
    error:  m => alert(m),
    info:   m => alert(m),
    success:m => alert(m),
    warning:m => alert(m)
  };

    // Simple error helper
  window.err = function (msg) {
     window.toastr.error(msg);
  };

  window.getFromAPI = function(params,onSuccess){
    $.ajax({
      url: BASE + '/api/reports.php',
      method: 'GET',
      data: params,
      dataType: 'json',
      cache: false
    }).done(function (json) {
      onSuccess && onSuccess(json);
    }).fail(function (xhr) {
        console.error('API error',xhr.status, xhr.responseText);
        err('API error ' + xhr.status);
    });
  };
})();

function msgArray(data){
  const m = data && data.message;
  return Array.isArray(m) ? m : (m && Array.isArray(m.message) ? m.message : []);
}

function GetPeriodList() {
  getFromAPI({ method: 'IOT_GetUsagePeriodList' }, function (data) {
    const rows = msgArray(data);
    $('#sel_date').empty().append('<option value="">Select One</option>');
    rows.forEach(r => { const v = r.period; if (v) $('#sel_date').append(new Option(v, v)); });
  });
}

function GetReportsList() {
  $('#sel_report').empty().append('<option value="">Select One</option>');
  getFromAPI({ method: 'IOT_GetReportsList' }, function (data) {
    msgArray(data).forEach(v => { if (v) $('#sel_report').append(new Option(v, v)); });
  });
}

function GetCustomersList() {
  $('#admin_customer').show();
  getFromAPI({ method: 'IOT_GetCustomerList' }, function (data) {
    const rows = msgArray(data);
    $('#sel_customer').empty().append('<option value="">Select One</option>');
    rows.forEach(r => { const v = r.customer; if (v) $('#sel_customer').append(new Option(v, v)); });
  });
}



function ExportReport(fileFormat) {
    //do something
    ShowExportReportDialog(fileFormat, $('#sel_report').val(), $('#sel_customer').val(), $('#sel_date').val())

}

function GetReport() {
  let isError = false;
  if (!$('#sel_report').val()) { err('Error - Please select a valid report.'); isError = true; }
  if (!$('#sel_date').val())   { err('Error - Please select a valid reporting period.'); isError = true; }
  if (!$('#sel_customer').val()){ err('Error - Please select a valid customer'); isError = true; }
  if (isError) return;

  if (result_table) {
    result_table.destroy();
    result_table = null;
    $('#report_list tbody, #report_list thead, #report_list tfoot').html('');
  }

  $('#reports-loading').show();
  $('#reports-body').hide();

  getFromAPI({
    method: 'IOT_GetReportColumns',
    report: $('#sel_report').val()
    }, function (data) {
        result_table_columns = msgArray(data);
        // Map columns using a function so that keys with spaces work
        const columns = result_table_columns.map(label => ({
        data: function (row) { return row[label]; },
        title: label
        }));

        // build THEAD and TFOOT to match column count
        $('#report_list thead').html('<tr>' + result_table_columns.map(l => `<th>${l}</th>`).join('') + '</tr>');
        $('#report_list tfoot').html('<tr>' + result_table_columns.map(() => '<th></th>').join('') + '</tr>');

        // footer
        let foot = '<tr class="text-bold">' + columns.map(()=>'<td></td>').join('') + '</tr>';
        $('#report_list tfoot').html(foot);

        const reportName = 'Report: ' + $('#sel_report').val() +
                        ' <br> Customer: ' + $('#sel_customer').val() +
                        ' <br> Period: ' + $('#sel_date').val();

        result_table = $('#report_list').DataTable({
        dom: "<'row'<'col-sm-12 col-md-6'<'text-gray font-weight-bold report-caption'>><'col-sm-12 col-md-6 text-right pt-5'lfB>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        processing: true,
        serverSide: true,
        paging: true,
        lengthChange: false,
        searching: false,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        pageLength: 10,
        buttons: [{
            extend: 'collection',
            text: 'Export',
            autoClose: true,
            buttons: [{ text: 'CSV', action: function () { ExportReport('CSV'); } }],
            fade: true
        }],
        columns: columns,
        ajax: $.fn.dataTable.pipeline({
            url: (window.APP_BASE || '') + '/api/reports.php',
            data: function (d) {
            d.method   = 'IOT_GetReport';
            d.report   = $('#sel_report').val();
            d.customer = $('#sel_customer').val();
            d.period   = $('#sel_date').val();
            d.nocache  = 1;
            }
        }),
        initComplete: function () {
            $('.report-caption').html(reportName);
            $('#reports-loading').hide();
            $('#reports-body').show();
        },
        language: { processing: '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>' }
        });
  });
}


function ShowOrdersReport() {

    //show loading
    $('#reports-loading').show()
    $('#reports-body').hide()

    var current_date = new Date()
    var cyear = current_date.getFullYear()
    var shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    var short_month = shortMonths[current_date.getMonth()];
    var period = short_month.toUpperCase() + ' ' + current_date.getFullYear()

    $('#sel_report').val('Order List')
    $('#sel_date').val(period)

    GetReport()

    //hide loading
    $('#reports-loading').hide()
    $('#reports-body').show()

}

var result_table = null;
var result_table_columns = [];


// Register an API method that will empty the pipelined data, forcing an Ajax
$.fn.dataTable.Api.register('clearPipeline()', function () {
    return this.iterator('table', function (settings) {
        settings.clearCache = true;
    });
});

$.fn.dataTable.pipeline = function (opts) {
    // Configuration options
    var conf = $.extend({
        pages: 10,     // number of pages to cache
        url: '',      // script url
        data: null,   // function or object with parameters to send to the server
        // matching how `ajax.data` works in DataTables
        method: 'GET' // Ajax HTTP method
    }, opts);

    // Private variables for storing the cache
    var cacheLower = -1;
    var cacheUpper = null;
    var cacheLastRequest = null;
    var cacheLastJson = null;

    return function (request, drawCallback, settings) {

        var ajax = false;
        var requestStart = request.start;
        var drawStart = request.start;
        var requestLength = request.length;
        var requestEnd = requestStart + requestLength;
        if (settings.clearCache) {
            // API requested that the cache be cleared
            ajax = true;
            settings.clearCache = false;
        } else if (cacheLower < 0 || requestStart < cacheLower || requestEnd > cacheUpper) {
            // outside cached data - need to make a request
            ajax = true;
        } else if (JSON.stringify(request.order) !== JSON.stringify(cacheLastRequest.order))
        {
            // properties changed (ordering, columns, searching)
            ajax = true;
        }

        // Store the request for checking next time around
        cacheLastRequest = $.extend(true, {}, request);

        if (ajax) {
            var ajaxData = {};

            // Need data from the server
            if (requestStart < cacheLower) {
                requestStart = requestStart - (requestLength * (conf.pages - 1));

                if (requestStart < 0) {
                    requestStart = 0;
                }
            }

            cacheLower = requestStart;
            cacheUpper = requestStart + (requestLength * conf.pages);

            //Request data
            ajaxData.sort = "`" + request.columns[request.order[0].column].data + "` " + request.order[0].dir;
            ajaxData.start = requestStart;
            ajaxData.length = requestLength * conf.pages;


            // Provide the same `data` options as DataTables.
            if (typeof conf.data === 'function') {
                var d = conf.data(ajaxData);
                if (d) {
                    $.extend(ajaxData, d);
                }
            } else if ($.isPlainObject(conf.data)) {
                $.extend(ajaxData, conf.data);
            }

            return $.ajax({
                "type": conf.method,
                "url": conf.url,
                "data": ajaxData,
                "dataType": "json",
                "cache": false,
                "success": function (json) {
                    // console.log('IOT_GetReport payload:', json);
                    // console.log('first row keys:',
                    // json?.message?.result?.[0] && Object.keys(json.message.result[0])
                    // );

                    if (json.message.Error != null) {
                        err(json.message.Error);
                        dt = {
                            "data": [],
                            "recordsTotal": 0,
                            "recordsFiltered": 0
                        }
                    } else if (json.message.toString().indexOf("FAIL") !== -1) {
                        err(json.message);
                        dt = {
                            "data": [],
                            "recordsTotal": 0,
                            "recordsFiltered": 0
                        }
                    } else {
                        dt = {
                            "data": json.message.result,
                            "recordsTotal": json.message.total,
                            "recordsFiltered": json.message.total
                        }
                    }

                    cacheLastJson = $.extend(true, {}, dt);

                    if (cacheLower != drawStart) {
                        dt.data.splice(0, drawStart - cacheLower);
                    }
                    if (requestLength >= -1) {
                        dt.data.splice(requestLength, dt.data.length);
                    }

                    drawCallback(dt);
                    if (json.message.summary) {
                        $(result_table.column(0).footer()).css("text-align", "right").html("Total");
                        $.each(json.message.summary, function (index, value) {
                            $(result_table.column(result_table_columns.indexOf(index)).footer()).html(parseFloat(value).toFixed(2));

                        });

                    }

                }
            });
        } else {
            dt = $.extend(true, {}, cacheLastJson);
            //dt.draw = request.draw;
            dt.data.splice(0, requestStart - cacheLower);
            dt.data.splice(requestLength, dt.data.length);

            drawCallback(dt);
        }
    }
};

var request_method_list = "";

if (typeof jQuery === "undefined") {
   alert("AdminLTE requires jQuery");
}

//load this at the start of each page.
$(document).ready(function () {

    //show loading status
    $('#reports-loading').show()
    $('#reports-body').hide()

    //load dropdowns
    GetReportsList();
    GetPeriodList();
    GetCustomersList();

    //hide loading status
    $('#reports-loading').hide()
    $('#reports-body').show()


})
