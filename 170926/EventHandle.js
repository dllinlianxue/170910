var EventHandle = {
    EventElement:function (type,eventhandle,element) {
        if (element.addEventListener) {
            element.addEventListener(type,eventhandle,element);
        } else {
            element.attachEvent('on'+type,eventhandle)
        }
    },
    RemoveElement:function (type,eventhandle,element) {
        if (element.removeEventListener) {
            element.removeEventListener(type,eventhandle,element);
        } else {
            element.detachEvent('on'+type,eventhandle)
        }
    }
};