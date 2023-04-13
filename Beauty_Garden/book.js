var val="Your services are: ",
            form = document.forms.book,
            text = book.elements.type;
            text.addEventListener('focus', text.select.bind(text));
            text.Even
            form.addEventListener('change', 
            function(e) {
            if(e.target.type == 'checkbox') {
            val += e.target.value ;
            val+=" ";
            text.value = val;
            }
            });