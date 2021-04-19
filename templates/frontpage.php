<?php include 'inc/header.php';?>

<nav aria-label="breadcrumb">
    <div class="container-fluid">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </div>
</nav>
<section id="main">
    <div class="container-fluid">
        <div class="row">
            <?php include 'inc/left-panel.php';?>
            
            <div class="col-md-9">
                <div class="card  bg-light">
                    <div class="card-header main-color-bg">
                        Panel Title
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                <div class="card-body">
                                    <h2><i class="fas fa-user"></i> <?php echo $users_count->total_users;?></h2>
                                    <h4>Users</h4>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h2><i class="fas fa-list-alt"></i> <?php echo $pages_count->total_pages;?></h2>
                                        <h4>Pages</h4>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h2><i class="fas fa-pencil-alt"></i> <?php echo $posts_count->total_posts;?></h2>
                                        <h4>Posts</h4>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h2><i class="fas fa-chart-bar"></i> 120</h2>
                                        <h4>Visits</h4>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-light">
                    <div class="card-header  ">
                        <h3>latest User</h3>
                    </div>
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-12 form-group">
                                <input id ="filter"  type="text" class="form-control" placeholder="filter Users...">
                            </div>
                        </div>
                    <table class="table  table-hover" id="users">
                            <thead class="thead-dark">
                            <tr>
                                <th class="defaultUpDown" scope="col" style="width:20%">Name</th>
                                <th scope="col" style="width:50%">Email</th>
                                <th class="defaultUpDown" scope="col">Joined</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user):?>
                                <tr>
                                    <td id="name"><?php echo $user->name?></td>
                                    <td><?php echo $user->email?></td>
                                    <td><?php echo date('M d Y',strtotime($user->created_at))?></td>
                                    
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        <!-- pager --> 
                        <div class="pager"> 
                            <img src="https://mottie.github.io/tablesorter/addons/pager/icons/first.png" class="first"/> 
                            <img src="https://mottie.github.io/tablesorter/addons/pager/icons/prev.png" class="prev"/> 
                            <span class="pagedisplay"></span> <!-- this can be any element, including an input --> 
                            <img src="https://mottie.github.io/tablesorter/addons/pager/icons/next.png" class="next"/> 
                            <img src="https://mottie.github.io/tablesorter/addons/pager/icons/last.png" class="last"/> 
                            <select class="pagesize" title="Select page size"> 
                                <option selected="selected" value="2">2</option> 
                                <option value="4">4</option> 
                                <option value="6">6</option> 
                                <option value="all">All</option> 
                            </select>
                            <select class="gotoPage" title="Select page number"></select>
                        </div>
                    </div> 
                </div><!-- CARD TABLE -->           
            </div><!-- 9 COL-MD-9 -->
        </div><!-- ROW FIRST -->
    </div>
</section>

<?php include 'inc/footer.php';?>

<!-- Filter -->
<script>
//document.ready in js
//document.addEventListener("DOMContentLoaded", function(event) {
//document.getElementById("filter").onkeyup =  function(){runEvent()};
document.getElementById("filter").addEventListener("input", runEvent);
function runEvent() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("filter");
    //console.log(input.value);
    filter = input.value.toUpperCase();
    table = document.getElementById("users");
    tr = table.getElementsByTagName("tr");
    console.log(tr);
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }       
    }
}
//});
</script>
    <!--  Table sorter and Pager -->
    <script>
    $('table').tablesorter({
        cssAsc: 'up',
        cssDesc: 'down',

// *** FUNCTIONALITY ***
// *** SORT OPTIONS ***
// These are detected by default,
// but you can change or disable them
// these can also be set using data-attributes or class names
headers: {
    // set "sorter : false" (no quotes) to disable the column
    0: {
        sorter: "text"
    },
    1: {
        sorter: "false"
    },
    2: {
        sorter: "text"
    },
    3: {
        sorter: "false"
    }
},

// ignore case while sorting
ignoreCase: true,

// forces the user to have this/these column(s) sorted first
sortForce: null,
// initial sort order of the columns, example sortList: [[0,0],[1,0]],
// [[columnIndex, sortDirection], ... ]
/* sortList: [
    [0, 0],
    [2, 0]
], */
// default sort that is added to the end of the users sort
// selection.
sortAppend: null,

// starting sort direction "asc" or "desc"
sortInitialOrder: "asc",
 
// Replace equivalent character (accented characters) to allow
// for alphanumeric sorting
sortLocaleCompare: false,

// third click on the header will reset column to default - unsorted
sortReset: false,

// restart sort to "sortInitialOrder" when clicking on previously
// unsorted columns
sortRestart: false,

// sort empty cell to bottom, top, none, zero
emptyTo: "bottom",

// sort strings in numerical column as max, min, top, bottom, zero
stringTo: "max",

// extract text from the table - this is how is
// it done by default
textExtraction: {
    0: function (node) {
        return $(node).text();
    },
    1: function (node) {
        return $(node).text();
    }
},

// *** CALLBACKS ***
// function called after tablesorter has completed initialization
initialized: function (table) {},

// *** SELECTORS ***
// jQuery selectors used to find the header cells.
selectorHeaders: '> thead th, > thead td',

// jQuery selector of content within selectorHeaders
// that is clickable to trigger a sort.
selectorSort: "th, td",

// rows with this class name will be removed automatically
// before updating the table cache - used by "update",
// "addRows" and "appendCache"
selectorRemove: "tr.remove-me",

// *** DEBUGING ***
// send messages to console
debug: false

}).tablesorterPager({

// target the pager markup - see the HTML block below
container: $(".pager"),

// use this url format "http:/mydatabase.com?page={page}&size={size}" 
ajaxUrl: null,

// process ajax so that the data object is returned along with the
// total number of rows; example:
// {
//   "data" : [{ "ID": 1, "Name": "Foo", "Last": "Bar" }],
//   "total_rows" : 100 
// } 
ajaxProcessing: function(ajax) {
    if (ajax && ajax.hasOwnProperty('data')) {
        // return [ "data", "total_rows" ]; 
        return [ajax.data, ajax.total_rows];
    }
},

// output string - default is '{page}/{totalPages}';
// possible variables:
// {page}, {totalPages}, {startRow}, {endRow} and {totalRows}
output: '{startRow} to {endRow} ({totalRows})',

// apply disabled classname to the pager arrows when the rows at
// either extreme is visible - default is true
updateArrows: true,

// starting page of the pager (zero based index)
page: 0,

// Number of visible rows - default is 10
size: 2,

// if true, the table will remain the same height no matter how many
// records are displayed. The space is made up by an empty 
// table row set to a height to compensate; default is false 
fixedHeight: true,
//adjust width of column
widthFixed:false
});
</script>
