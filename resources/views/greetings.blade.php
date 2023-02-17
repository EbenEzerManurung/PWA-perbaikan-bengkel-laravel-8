<script>
    function greetings() {
        let asiaTime = new Date().toLocaleString('en-US', {
            timeZone: 'Asia/Jakarta'
        });
        asiaTime = new Date(asiaTime);
        let hours = asiaTime.getHours();
        if (hours <= 10) msg = 'Selamat Pagi!';
        if (hours >= 11) msg = 'Selamat Siang!';
        if (hours >= 16) msg = 'Selamat Sore!';
        if (hours >= 19) msg = 'Selamat Malam!';

        return msg;
    }

    function displayDateTime()
{
let DaysList = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
let d = new Date()
let day = DaysList[d.getDay()]
let time = d.toLocaleTimeString()
if (time.split(':')[0] < 10) time = `0${time}`

return `Today is: ${day}\nCurrent time is: ${time}`
}

console.log(displayDateTime())
</script>
