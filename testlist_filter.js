//фильтр полей - отображение нужных полей
function fieldsFiltering() {
    //получаем выбранное значение в выпадающем списке
    let filterSelected = $('select[name="type_val"]').val();
    let fieldsInput = $('input');

    //обходим все элементы input
    fieldsInput.each(function() {
        var fieldInput = $(this);
        var fieldName = fieldInput.attr('name');

        //если атрибут name содержит это значение, то делаем элемент видимым (вместе с его родительским тэгом <p>)
        if (fieldName && fieldName.indexOf(filterSelected) !== -1) {
            fieldInput.closest('p').show();
        }
        //иначе скрываем элемент
        else {
            fieldInput.closest('p').hide();
        }
    });
}

//фильтр полей - вызов функции
$(document).ready(function() {

    //вызов функции фильтрации - при выборе выпадающего списка
    $('select[name="type_val"]').change(function(){
        fieldsFiltering();
    });

    //вызов функции фильтрации - при загрузке страницы
    fieldsFiltering();
});