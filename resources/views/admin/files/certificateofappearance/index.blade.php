<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-increment Table</title>
    <style>
        table {
            border: none;
            border-collapse: collapse;
            width: 88%;
            margin-right: calc(12%);
            margin-left: 23px;
        }

        td {
            color: black;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            vertical-align: bottom;
            border: 1pt dotted windowtext;
            width: 31.2232%;
            height: 14.5pt;
        }

        td[colspan="3"] {
            text-align: center;
            border-right: 1pt dotted windowtext;
            border-bottom: 1pt dotted windowtext;
            width: 36.6869%;
        }
    </style>
</head>

<body>
    <table id="autoIncrementTable">
        <tbody>
            <tr>
                <td>Name</td>
                <td>Designation</td>
                <td>Office</td>
            </tr>
        </tbody>
    </table>
    <script>
        // Function to add a new row with auto-incremented index
        function addRow() {
            var table = document.getElementById("autoIncrementTable");
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
        
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
        
            // Set the content of the cells
            cell1.innerHTML = rowCount; // Auto-incremented index
            cell2.innerHTML = "<input type='text'>";
            cell3.innerHTML = "<input type='text'>";
        }
    </script><!-- Button to add new row -->
    <p><button>Add Row</button></p>
</body>

</html>