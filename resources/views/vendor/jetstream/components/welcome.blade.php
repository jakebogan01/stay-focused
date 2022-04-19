{{--  --}}
<form action="">
    <input type="checkbox">
    <input type="text" placeholder="Start At">
    <input type="text" placeholder="End At">
    <input type="text" placeholder="Status">
    <input type="text" placeholder="Title">
    <textarea placeholder="Description"></textarea>
    <textarea placeholder="Notes"></textarea>
    <label for="priority">Priority:</label>
        <select id="priority" name="priority">
            <option value="high">High</option>
            <option value="medium">Medium</option>
            <option value="low">Low</option>
        </select>    
        <input type="checkbox">

        <label for="color">Color:</label>
        <select id="color" name="color">
            <option value="red ">Red</option>
            <option value="blue">Blue</option>
        </select>    
        <input type="checkbox">
        <select id="category" name="category">
            <option value="production ">Production</option>
            <option value="devlopment">Development</option>
        </select>   
        <select id="status" name="status">
            <option value="closed ">Closed</option>
            <option value="pending">Pending</option>
            <option value="new">New</option>

        </select>   

    <button>Submit</button>



</form>