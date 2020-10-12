var followBtn = document.getElementById('followBtn');
function followUser(e) {
    let btn = e.target;
    let follows = btn.dataset.follows;
    let userId = btn.dataset.userId;
    let followers = document.querySelector("#followers");
    let following = document.querySelector("#following");

    axios.post('/flag/follow/' + userId)
        .then(response => {
            getFollow();
        }).catch(errors => {
            console.log(errors);
        });
}

function getFollow() {
    let followBtn = document.querySelector('#followBtn');
    let userId = followBtn.dataset.userId;
    let followers = document.querySelector("#followers");
    let following = document.querySelector("#following");

    axios.get('/api/follow/' + userId)
        .then(response => {
            followBtn.innerHTML = response.data['follows'];
            followers.innerHTML = response.data['followers'];
            following.innerHTML = response.data['following'];
        }).catch(errors => {
        console.log(errors);
    });
}

function userFollowersInfo(e)  {
    let getFollowingName = document.querySelector('#getFollowingName');
    let info = e.target;
    let userFollowInfo = info.dataset.followingInfo;
    console.log(userFollowInfo);
    $.ajax({
        url: '/post',
        method: 'GET',
    }).done(function (response) {

    }).fail(function (error) {
        console.log(error);
    });
}

window.addEventListener("load", getFollow);
window.addEventListener("load", userFollowersInfo);
