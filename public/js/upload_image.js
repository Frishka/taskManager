var fileTypes = [
        'image/jpeg',
        'image/gif',
        'image/png'
    ],
    preview = $('.preview')[0],
    input = $('.file');
function validFileType(file) {
    for(var i = 0; i < fileTypes.length; i++) {
        if(file.type === fileTypes[i]) {
            return true;
        }
    }

    return false;
}

function updateImageDisplay(e) {
    e.preventDefault();
    while(preview.firstChild) {
        preview.removeChild(preview.firstChild);
    }

    var curFiles = input[0].files;
    if(curFiles.length === 0) {
        var para = document.createElement('p');
        para.textContent = 'Не выбрано изображение';
        preview.appendChild(para);
    } else {
        var list = document.createElement('div');
        preview.appendChild(list);
        for(var i = 0; i < curFiles.length; i++) {
            var listItem = document.createElement('p'),
                para = document.createElement('p');

            if(validFileType(curFiles[i])) {
                para.textContent = '';
                var image = document.createElement('img');
                var title = document.createElement('h4');
                var text = document.createElement('p');
                image.src = window.URL.createObjectURL(curFiles[i]);
                image.style.height = "240px";

                title.innerText = $('input[name="title"]').val();
                text.innerText = $('textarea[name="text"]').val();

                listItem.appendChild(title);
                listItem.appendChild(image);
                listItem.appendChild(text);
            } else {
                para.textContent = 'Некорректный тип файла изображения';
                listItem.appendChild(para);
            }

            list.appendChild(listItem);
        }
    }
}