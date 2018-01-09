/**
 * Created by intern on 2017/9/27.
 */
var EventObject = {
    Eventhandle:function (type,eventhandle,element) {
        if (element.addEventListener) {
            element.addEventListener(type,eventhandle,false);
        } else (element.attachEvent('on'+type,eventhandle))
    },
    RemoveEvent:function (type,eventhandle,element) {
        if (element.removeEventListener) {
            element.removeEventListener(type,eventhandle,false);
        } else (element.detachEvent('on'+type,eventhandle));
    }
};