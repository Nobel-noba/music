
function locator(identification) {
    var identfy=identification;
    $('#player').html(
        '\n' +
        '              <audio controls style="float: right" >\n' +
        '\n' +
        '                  <source id="source" src="songs/'+identfy+'.mp3" type="audio/mp3">\n' +
        '                  <source id="source" src="songs/'+identfy+'.mp3" type="audio/wav">\n' +
        '                  Your browser does not support the audio element.\n' +
        '              </audio>'
    );

}
function homelocater() {
    document.location.href='../../';
}
function edit(id) {
    document.location.href='pages/edit/edit.php?id='+id;
}
function del(id) {
    document.location.href='pages/edit/delete.php?id='+id;
}
function insert() {
    document.location.href='pages/insert/insert.php';
}