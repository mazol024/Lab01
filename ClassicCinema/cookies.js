var Cookie = (function () {
    var pub = {};
    pub.set = function (name, value, seconds) {
        var date, expires;
        if (seconds) {
            date = new Date();
            date.setHours(date.getHours());
            date.setMinutes(date.getMinutes());
            date.setSeconds(date.getSeconds() + seconds);
            expires = "; expires=" + date.toLocaleTimeString();
        } else {
            expires = "";
        }
        /*document.cookie = name + "=" + value + expires + "; path=/";*/
        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
    };
    pub.get = function (name) {
        var nameEq, cookies, cookie, i;
        nameEq = encodeURIComponent(name) + "=";
        cookies = document.cookie.split(";");
        for (i = 0; i < cookies.length; i += 1) {
            cookie = cookies[i].trim();
            if (cookie.indexOf(nameEq) === 0) {
                return decodeURIComponent(cookie.substring(nameEq.length, cookie.length));
            }
        }
        return null;
    };
    pub.clear = function (name) {
        pub.set(encodeURIComponent(name), "", -1);
    };
    return pub;
}());