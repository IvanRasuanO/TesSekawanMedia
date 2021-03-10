
$(function () {
    $("#tabelpegawai").DataTable({

        "columns": [
        { "data": "no" },
        { "data": "id" },
        { "data": "employee_name" },
        { "data": "employee_salary" },
        { "data": "employee_age" },
        { "data": "profile_image" }
        ]
    });
});
// $(document).ready(function() {

//     $.ajax({
//         type: "GET",
//         url: 'http://static.sekawanmedia.co.id/data.json',
//         headers: {  'Access-Control-Allow-Origin': 'http://The web site allowed to access' },
//         type: 'dataType',
//         success: function(jsondata){
//              console:log(jsondata)
//         }
//      })
// } );



