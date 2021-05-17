
$(document).ready(function () {
    const dragulaComp = dragula(
        columns.map(column => document.getElementById(column))
    );

    dragulaComp.on('drop', (component) => {
        const id = $(component).attr("id");
        // const targetParentId = $(component.parentElement).attr('id')
        const targetParentId = $(component.parentElement).attr('data-column-id')

        moveCard(id, targetParentId)
    })

    const moveCard = (taskId, targetColumnId) => {
        $.ajax({
            type: "POST",
            url: 'kanban/move',
            data: { taskId, targetColumnId },
            success: (data) => {
                console.log(data);
            },
        });
    }
});