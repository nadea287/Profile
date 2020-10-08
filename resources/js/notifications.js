let box = document.getElementById("notifi-box");
let notificationToggle = document.getElementById("notification_toggle");
notificationToggle.addEventListener("click", toggleNotifi);
function toggleNotifi() {
    if (box.style.opacity === "0") {
        box.style.opacity = 1;
    } else {
        box.style.opacity = 0;
    }
}
function markNotificationAsRead(notificationCount) {
    if (notificationCount != 0) {
        $.get('/markAsRead');
    }
}

var notifyElement =  document.getElementById('notifications-count');
var notifyCount = notifyElement.innerHTML;
if (notifyCount == 0) {
    notifyElement.style.opacity = 0;
} else {
    notifyElement.style.opacity = 1;
}
