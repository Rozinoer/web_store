function check_field() {
    let i = 0;
    let flag = true;
    let input = document.getElementsByClassName('data');
    let span = document.getElementsByClassName('error');
    while (i < input.length)
    {
        if (input.item(i).value ==='')
        {
            span.item(i).innerHTML='Поле не заполнено!';
            flag = false;
        }
        ++i;
    }
    return flag;
}

