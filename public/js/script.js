$min_input = $("#minrange");
$max_input = $("#maxrange");

$min_span = $("#min_members_span");
$max_span = $("#max_members_span");

// console.log($min_input.val());
// console.log("hello");

$min_input.on("input", () => {
    // console.log($min_input.val());
    $min_span.html($min_input.val());
})

$max_input.on("input", () =>{
    // console.log($max_input.val());
    $max_span.html($max_input.val());
})

$max_input.on("change", () => {
    console.log($max_input.val());
})