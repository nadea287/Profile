// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
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
            // console.log(response.data['followersInfo']);
            // userFollowersInfo();
        }).catch(errors => {
        console.log(errors);
    });
}



function userFollowersInfo(e)  {
    let getFollowingName = document.querySelector('#getFollowingName');
    let info = e.target;
    let userFollowInfo = info.dataset.followingInfo;
    console.log(userFollowInfo);
    // let userAllInfo = userData.data['followersInfo'];
    // console.log(userAllInfo);
    // var userId = userAllInfo.map(item => item.id);
    // console.log(userId);
    $.ajax({
        url: '/post',
        method: 'GET',
    }).done(function (response) {
        // let userData = response.data['followingInfo'];
        // console.log(userData);
        // getFollowingName.innerHTML = userId;
    }).fail(function (error) {
        console.log(error);
    });
}

// window.onload = getFollow;
window.addEventListener("load", getFollow);
window.addEventListener("load", userFollowersInfo);
// window.addEventListener("DOMContentLoaded", () => {
//     userFollowersInfo();
// });
