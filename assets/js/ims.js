$.fn.datetimepicker.dates['zh-CN'] = {
    days: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"],
    daysShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六", "周日"],
    daysMin:  ["日", "一", "二", "三", "四", "五", "六", "日"],
    months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
    monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
    today: "今天",
    suffix: [],
    meridiem: ["上午", "下午"]
};

$(".form_datetime").datetimepicker({
    language: 'zh-CN',
    format: 'yyyy-mm-dd hh:ii',
    autoclose: true,
    todayBtn: true,
    todayHighlight: true,
    startDate: '2013-01-01 00:00',
    minuteStep: 10
});

$(function () {
    $('#resetView').click(function () {
        $('#customer_table').bootstrapTable('resetView');
    });
});

$(function () {

    $("#customer_attachment").fileinput({
        language: 'zh',
        uploadUrl: 'upload',
        uploadExtraData: function (previewId, index) { return {'customer_idcard': $('#customer_idcard').val()};},
        showUpload: false,
        uploadAsync: false, // 不使用异步上传
        allowedFileExtensions: ["jpg", "png", "gif"],
        browseIcon: "<i class=\"fa fa-file-picture-o\"></i> ",
        image: {width: "auto", height: "auto", 'max-width': "100%", 'max-height': "100%"},
    });
}).on('filebatchpreupload', function (event, data) {
    var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
    console.log(files);
    console.log(response);
    console.log('File batch pre upload');
}).on('filebatchuploadsuccess', function(event, data) {
    var form = data.form, files = data.files, extra = data.extra,
        response = data.response, reader = data.reader;
    console.log(files);
    console.log(response);
    console.log(response['result']);
    console.log('File batch upload success');

    // submit customer data
    var data = $("#form_create").serializeArray();
    data.push({"name":"customer_attachment[]","value": response['result']});
    $.ajax({
        type: 'POST',
        data: data,
        dataType: 'json',
        url: 'add',
        success: function (response)
        {
            console.log(response);
        },
        error: function ()
        {
            console.log('error: can not find server!');
        },
    });
}).on('filebatchuploadcomplete', function(event, files, extra) {
    console.log(files);
    console.log('File batch upload complete');

}).on('filebatchuploaderror', function(event, data, msg) {
    console.log(msg);
    console.log('Error: File upload failed.');
});

$(function () {
    $("#customer_create_submit").click(function () {
        var input = $("input[type='text']");
        var field = input.attr('name');
        var text = input.val();
        // 1.check the form data at first
        var ok = formValidate(field, text);
        if( ok === false )
        {
            input.parent().addClass('has-error has-feedback');
            return;
        }
        else
        {
            input.parent().removeClass('has-error has-success');
            input.parent().addClass('has-success has-feedback');
        }

        // 2.second, upload attachments
        $("#customer_attachment").fileinput('upload');
    });
});

function formValidate(field, text)
{
    switch (field)
    {
        case 'customer_name':
            var pattern = /^[\u4E00-\u9FA5]{2,4}$/;
            break;
        case 'customer_father':
        case 'customer_mother':
        case 'customer_teacher':
            var pattern = /^[\u4E00-\u9FA5]{2,4}$/;
            break;
        case 'customer_idcard':
            var pattern = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
            break;
        case 'customer_phone':
            var pattern = /^0?(13[0-9]|15[012356789]|18[0236789]|14[57])[0-9]{8}$/;
            break;
        case 'customer_father_phone':
        case 'customer_mother_phone':
        case 'customer_teacher_phone':
            var pattern = /^0?(13[0-9]|15[012356789]|18[0236789]|14[57])[0-9]{8}$/;
            break;
        case 'customer_qq':
            var pattern = /^[1-9][0-9]{4,11}$/;
            break;
        default:
            ret = 0;
            return false;
    }

    return text.length == 0 ? false : pattern.exec(text);
}

$("input[type='text']").bind('focusout', function(){

    var ok = formValidate($(this).attr('name'), $(this).val());
    if( ok === false )
    {
        $(this).parent().addClass('has-error has-feedback');
        return;
    }
    else
    {
        $(this).parent().removeClass('has-error has-success');
        $(this).parent().addClass('has-success has-feedback');
    }
});