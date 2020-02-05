
function locator(identification) {
    var identfy=identification;
    $('#player').html(
        '\n' +
        '              <audio controls style="float: right" >\n' +
        '\n' +
        '                  <source id="source" src="songs/'+identfy+'.mp3" type="audio/mpeg">\n' +
        '                  Your browser does not support the audio element.\n' +
        '              </audio>'
    );

}