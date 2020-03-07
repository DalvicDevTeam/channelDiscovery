$min_input = $("#minrange");
$max_input = $("#maxrange");

$min_span = $("#min_members_span");
$max_span = $("#max_members_span");

// console.log($min_input.val());
// console.log("hello");

$min_input.on("input", () => {
    // console.log($min_input.val());
    $min_span.html($min_input.val());
});

$max_input.on("input", () =>{
    // console.log($max_input.val());
    $max_span.html($max_input.val());
});

$max_input.on("change", () => {
    console.log($max_input.val());
});

$addChannelForm = $("#add-channel-form");
$userName = $("#channel_username");
$ownerName = $("#channel_owner_name");
$ownerPhone = $("#channel_owner_phone");
$ownerAddress = $("#channel_owner_address");
$addChannelBtn = $("#add-channel-btn");

$addChannelForm.on("submit", (e) => {
// $addChannelBtn.on("click", () => {
    e.preventDefault();
    console.log($ownerName.val());
    console.log($ownerAddress.val());
    console.log($ownerPhone.val());
    console.log($userName.val());
    console.log('loading..');
    $.post("http://localhost:5000/channel/approve",
    {
        ownername: $ownerName.val(),
        owneraddress: $ownerAddress.val(),
        ownerphone: $ownerPhone.val(),
        username: $userName.val()
    },(data, status) => {
        console.log(status);
        console.log(data);
    });
});