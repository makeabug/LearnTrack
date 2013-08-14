/**
* 模拟post请求
*
* @param String url
* @param Object params
* @return Dom
*/
function post(url, params) {
    var temp = document.createElement("form");
    temp.action = url;
    temp.method = "post";
    temp.style.display = "none";
    for (var x in params) {
        var opt = document.createElement("input");
        opt.type = 'hidden';
        opt.name = x;
        opt.value = params[x];
        temp.appendChild(opt);
    }      
    document.body.appendChild(temp);
    temp.submit();
    return temp;
}