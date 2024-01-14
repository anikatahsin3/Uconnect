const { addAbortSignal } = require("stream");

const id = document.getElementById('id');
const name = document.getElementById('name');

const counseling_time_start = document.getElementById('counseling_time_start');
const counseling_time_end = document.getElementById('counseling_time_end');


const add = document.getElementById('add');
const cancel = document.getElementById('cancel');

const database = firebase.database();

addAbortSignal.addEventListener('click', (e) =>{
    e.preventDefault();

    database.ref('/user/'+ id.value).set({
        t_name: name.value,
        counseling_time_start: counseling_time_start.value,
        counseling_time_end: counseling_time_end.value,

    });
});

