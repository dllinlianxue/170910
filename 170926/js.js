var Obj = {
    createElement:function (tagName,innerHTML,element) {
        var ele = document.createElement(tagName);
        ele.innerHTML = innerHTML;
        element.appendChild(ele);
    }
};
var Dl = {
    change:function (tagName,color,element) {
        var div = document.createElement(tagName);
        div.style.backgroundColor = color;
        element.appendChild(div);
    }
};