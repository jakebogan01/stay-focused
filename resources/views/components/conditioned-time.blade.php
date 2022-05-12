<script>
    let blockStartTime = <?php echo json_encode($startTime) ?>;
    let taskEndTime = <?php echo json_encode($endTime) ?>;
    let startTimeModal = document.querySelector('.startTime');
    let endTimeModal = document.querySelector('.endTime');
    let progressWidth = document.querySelector('.progressWidth');
    let progressPosition = 0;

    const d = new Date();
    let date = new Date(
        d.getMonth()
        + " " +
        d.getDate()
        + " " +
        d.getFullYear().toString()
        + " " +
        taskEndTime
    );
    let options = {
        hour: 'numeric',
        minute: 'numeric',
        hour12: true
    };
    let timeString = date.toLocaleString('en-US', options);

    document.querySelector('.showTime').innerHTML = timeString;


    // let example = setInterval(() => {
    //     let today = new Date();
    //     let currentTime = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    //
    //     if(currentTime === '19:50:15') {
    //         console.log('block time started');
    //         startTimeModal.classList.remove('hidden');
    //         startTimeModal.classList.add('block');
    //         //start the timer
    //         progressPosition++;
    //         progressWidth.style.width = progressPosition + 'px';
    //     }
    //
    //     if(currentTime === '19:50:20') {
    //         console.log('task time ended');
    //         endTimeModal.classList.remove('hidden');
    //         endTimeModal.classList.add('block');
    //         clearInterval(example);
    //     }
    //
    //     console.log(currentTime);
    // }, 1000);

    let closeModal = () => {
        endTimeModal.classList.remove('block');
        endTimeModal.classList.add('hidden');
        startTimeModal.classList.remove('block');
        startTimeModal.classList.add('hidden');
    }
</script>
