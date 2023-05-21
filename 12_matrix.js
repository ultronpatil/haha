function addMatrices(matrix1, matrix2) {
    var result = [];
    for (var i = 0; i < matrix1.length; i++) {
      var row = [];
      for (var j = 0; j < matrix1[0].length; j++) {
        row.push(matrix1[i][j] + matrix2[i][j]);
      }
      result.push(row);
    }
    return result;
  }
  
  var matrix1 = [[1, 2, 3], [4, 5, 6]];
  var matrix2 = [[7, 8, 9], [10, 11, 12]];
  
  var result = addMatrices(matrix1, matrix2);
  
  console.log(result);