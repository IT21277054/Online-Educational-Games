let counter = 1;
// const tp = document.getElementById('topic');
// const cn = document.getElementById('content');
// const topic = ['Slide 1', 'Slide 2', 'Slide 3', 'Slide 4'];
// const content = ['hena 1k gahanna one', 'hena 2k gahanna one', 'hena 3k gahanna one', 'hena 4k gahanna one'];
setInterval(function () {
    document.getElementById("radio" + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }

}, 5000);