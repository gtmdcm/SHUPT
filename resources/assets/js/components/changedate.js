function changeDate(i) {
    var e = document.getElementById('day');
    while (e.length > 0)
        e.remove(e.length - 1);
    var j = -1;
    if (i == "na")
        k = 0;
    else if (i == 2)
        k = 28;
    else if (i == 4 || i == 6 || i == 9 || i == 11)
        k = 30;
    else
        k = 31;
    while (j++ < k) {
        var s = document.createElement('option');
        var e = document.getElementById('day');
        if (j == 0) {
            s.text = "Day";
            s.value = "na";
            try {
                e.add(s, null);
            }
            catch (ex) {
                e.add(s);
            }
        }
        else {
            s.text = j;
            s.value = j;
            try {
                e.add(s, null);
            }
            catch (ex) {
                e.add(s);
            }
        }
    }
}

y = 1993;
while (y-- > 1940) {
    var s = document.createElement('option');
    var e = document.getElementById('year');
    s.text = y;
    s.value = y;
    try {
        e.add(s, null);
    }
    catch (ex) {
        e.add(s);
    }
}
export {
    changeDate
}