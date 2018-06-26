<form action="/test/test" method="POST">
    {{csrf_field()}}

    <input id="txtDate" type="text" name="start_date" title="Date"/>

    <input type="button" onclick="getdate()" value="Fill Follow Date" />

<p>Follow Date:
    <input id="follow_Date" type="hidden" name="end_date"/>
</p>
    <input type="submit" name="submit" value="Submit">
</form>

<script>


    function getdate() {
        var tt = document.getElementById('txtDate').value;
        alert(tt);

        var date = new Date(tt);
        var newdate = new Date(date);

        newdate.setDate(newdate.getDate() + 180);

        var dd = newdate.getDate();
        var mm = newdate.getMonth() + 1;
        var y = newdate.getFullYear();

        var someFormattedDate = mm + '/' + dd + '/' + y;
        document.getElementById('follow_Date').value = someFormattedDate;
        alert(document.getElementById('follow_Date').value = someFormattedDate);
    }
</script>