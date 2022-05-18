function selectTodosLosDias(){

if($("#Shows_todoslosdias:checked").val() == 'on'){
    $('#divFecha').addClass( 'displayNone' );
}

else {
    $('#divFecha').removeClass( 'displayNone' );   
}

}

