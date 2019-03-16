//print datatable
$(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
} );

$(function() {
    $('.calendar').pignoseCalendar();
});


$('#pend').change(function() {
	var pen = $(this).val();
	switch(pen){
		case 'sd': 
		$('#sd').show(); $('#smp').hide(); $('#sma').hide();
		break;
		case 'smp': 
		$('#sd').hide(); $('#smp').show(); $('#sma').hide();
		break;		
		case 'sma': 
		$('#sd').hide(); $('#smp').hide(); $('#sma').show();
		break;	
		default :	
		$('#sd').hide(); $('#smp').hide(); $('#sma').hide(); 
	}

});

function startTime () {
var today = new Date ();
var h = today.getHours();
var m = today.getMinutes();
var s = today.getSeconds();

var tahun = today.getFullYear();
var bulan = today.getMonth()+1;
var tanggal = today.getDate();

m = checkTime (m);
s = checkTime (s);

document.getElementById('date').innerHTML = tanggal+"/"+bulan+"/"+tahun;
document.getElementById('time').innerHTML = h+ ":" +m+ ":" +s;
t = setTimeout('startTime()',500);
}
function checkTime(i) {
if (i<10) {
i = "0" + i;}
return i;
}