<script>
    let blockStartTime = <?php echo json_encode($startTime) ?>;
    let taskEndTime = <?php echo json_encode($endTime) ?>;

    console.log(blockStartTime);
    console.log(taskEndTime);

    // setInterval(() => {
    //     let today = new Date();
    //     let currentTime = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    //     currentTime === blockStartTime ? console.log('Okay man go go go') : console.log('Not yet');
    //     console.log(currentTime);
    // }, 1000);
</script>
