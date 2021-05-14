
$(document).ready(function () {
    dragula(
        columns.map(column => document.getElementById(column))
    );

});