<div class="main-search-form">
    <div class="form">
        <form action="rent/properties" method="get">
            <div class="f-group">
                <label for="location">Location</label><br/>
                <input type="text" name="location" id="location" placeholder="Search by location, eg. Postcode, City">
            </div>
            <div class="f-group">
                <label for="property-status">Property status</label><br/>
                <select name="property-status" id="property-status">
                    <option value="house">House</option>
                    <option values="flat">Flat</option>
                    <option values="studio">Studio</option>
                </select>
            </div>
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
                <input type="range" list="tickmarks" class="slider" name="price" id="price" min="200.00" max="1000.00" step="100">
                <datalist id="tickmarks">
                    <option value="200" label="200-400">
                    <option value="400" label="400-600">
                    <option value="600" label="600-800">
                    <option value="800" label="800-1000">
                    <option value="1000" label="+1000">
                </datalist>
            </div>
            <input type="submit" value="Search">
        </form>
    </div>
</div>