@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-lg-12 m-auto">
            <form action="{{ route('excel.store') }}" method="POST">
            @csrf
                <div>
                    <a href="#" id="clear_link">Clear</a>
                </div>
                <div class="mb-3">
                    <textarea id="myDemoTextArea" cols="50" rows="3" placeholder="Text Input"></textarea>
                </div>

                <div id="table_container"></div>
                <div class="mb-3">
                    <textarea id="tableAsJSON" cols="50" rows="5" placeholder="Text Area"></textarea>
                </div>

                <input type="hidden" name="name">
                <input type="hidden" name="email">
                <input type="hidden" name="address">
                <input type="hidden" name="phone">
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>



<script>
    let constructTableFromPastedInput = (pastedInput) => {
        let rawRows = pastedInput.split("\n");
        let headRow = "";
        let bodyRows = [];
        rawRows.forEach((rawRow, idx) => {
          let rawRowArray = rawRow.split("\t");
          if (idx == 0) {
            headRow = `<tr><th>${rawRowArray.join("</th><th>")}</th></tr>`;
          } else {
            bodyRows.push(`<tr><td>${rawRowArray.join("</td><td>")}</td></tr>`);
          }
        });
        return `
                      <table class="boostrap4_table_head_dark_striped_rounded_compact">
                          <thead>
                              ${headRow}
                          </thead>
                          <tbody>
                              ${bodyRows.join("")}
                          </tbody>
                      </table>
                  `;
      };

      let constructJSONFromPastedInput = (pastedInput) => {
        let rawRows = pastedInput.split("\n");
        let headersArray = rawRows[0].split("\t");
        let output = [];
        rawRows.forEach((rawRow, idx) => {
          if (idx > 0) {
            let rowObject = {};
            let values = rawRow.split("\t");
            headersArray.forEach((header, idx) => {
              rowObject[header] = values[idx];
            });
            output.push(rowObject);
          }
        });
        return output;
      };

      const theTextArea = document.getElementById("myDemoTextArea");
    //   console.log(theTextArea.value)


      const inputHandler = function (e) {
        let inputText = e.target.value;
        let tableHTML = constructTableFromPastedInput(inputText);
        let tableAsJson = constructJSONFromPastedInput(inputText);
        let prettyJSON = JSON.stringify(tableAsJson, null, 2);
        console.log(prettyJSON);
        document.getElementById("table_container").innerHTML = tableHTML;
        document.getElementById("table_container").style.display = "block";
        document.getElementById("tableAsJSON").value = prettyJSON;
      };

      theTextArea.addEventListener("input", inputHandler);

      document.getElementById("clear_link").addEventListener("click", () => {
        document.getElementById("myDemoTextArea").value = "";
        document.getElementById("table_container").innerHTML = "";
        document.getElementById("table_container").style.display = "none";
        document.getElementById("tableAsJSON").value = "";
      });


</script>

@endsection


