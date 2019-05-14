<div class="main-search-form">
    <div class="form">
         @include('helpers.messages')
        <form action="/search/properties" method="get">
            <div class="f-group">
                <label for="location">Location</label><br/>
                <input type="text" name="location" id="location" placeholder="Search by location, eg. London">
            </div>
            <div class="f-group">
                <label for="type">Type of property</label>
                <select id="type" name="type">
                    <option value="flat">Flat</option>
                    <option value="house">House</option>
                <select>
            </div>
            <input hidden name="property-status" value="sell">
            <div class="f-group">
                <label for="num-beds">Bedrooms</label><br/>
                <input type="range" list="tickmarks" class="slider" name="num-beds" min="1" max="5" id="num-beds">
                <datalist id="tickmarks">
                    <option value="1" label="1">
                    <option value="2" label="2">
                    <option value="3" label="3">
                    <option value="4" label="4">
                    <option value="5" label="5">
                </datalist>
            </div>
             <div class="f-group">
                <label for="price">Price range</label><br/>
                <input type="range" list="tickmarks" class="slider" name="price" id="price" min="400" max="1000" step="200">
                <datalist id="tickmarks">
                    <option value="100" label="-400">
                    <option value="200" label="-600">
                    <option value="800" label="-800">
                    <option value="1000" label="-1000"> 
                </datalist>
            </div>
            <input type="submit" value="Search">
        </form>
    </div>
</div>