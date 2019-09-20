<script type="text/javascript">
var m_names = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",
"Agustus", "September", "Oktober", "November", "Desember");
var d_names = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
var currentTime = new Date()
var day = currentTime.getDay()
var month = currentTime.getMonth() + 1
var date = currentTime.getDate()
var year = currentTime.getFullYear()
document.write( d_names[day] + " | " + date + " " + m_names[month] + " " + year + " | ")
var currentTime = new Date()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
if (minutes < 10){
minutes = "0" + minutes
}
document.write(hours + ":" + minutes + " ")
if(hours > 11){
document.write("PM")
} else {
document.write("AM")
}
</script>