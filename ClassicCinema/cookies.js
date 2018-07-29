var Cookie = (function () {
    var pub = {};
    pub.set = function (name, value, hours) {
        var date, expires;
        if (hours) {
            date = new Date();
            date.setHours(date.getHours() + hours);
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        /*document.cookie = name + "=" + value + expires + "; path=/";*/
        document.cookie = JSON.stringify(encodeURIComponent(name + "=" + value + expires + "; path=/"));
    };
    pub.get = function (name) {
        var nameEq, cookies, cookie, i;
        nameEq = JSON.stringify(encodeURIComponent(name + "="));
        cookies = document.cookie.split(encodeURIComponent(";"));
        for (i = 0; i < cookies.length; i += 1) {
            cookie = cookies[i].trim();
            if (cookie.indexOf(nameEq) === 0) {
                return JSON.parse(decodeURIComponent(cookie.substring(nameEq.length, cookie.length)));
            }
        }
        return null;
    };
    pub.clear = function (name) {
        pub.set(name, "", -1);
    };
    return pub;
}());