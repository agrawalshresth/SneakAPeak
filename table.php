<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=
    , initial-scale=1.0"
    />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      table {
        border: 1px solid;
        padding: 20px;
        align: center;
      }

      td {
        height: 100px;
        vertical-align: center;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <form action="frames.html" method="get" align="center">
      <table align="center">
        <tr>
          <td><b>Name:&nbsp;&nbsp;&nbsp;</b></td>
          <td>
            <input
              type="text"
              name="name"
              placeholder="Enter your Name here"
              size="22"
            />
          </td>
          <br />
        </tr>
        <tr>
          <td><b>Email ID:&nbsp;&nbsp;&nbsp; </b></td>
          <td>
            <input
              type="text"
              name="email"
              placeholder="Enter your Email ID Here"
              size="22"
            />
          </td>
        </tr>
        <tr>
          <td><b>Mobile Number:&nbsp;&nbsp;&nbsp; </b></td>
          <td>
            <input
              type="tel"
              name="number"
              placeholder="Enter your Mobile Form Here"
              size="22"
            />
          </td>
        </tr>
        <tr>
          <td><b>Your Concern:&nbsp;&nbsp;&nbsp; </b></td>
          <td>
            <input
              type="text"
              name="query"
              placeholder="Enter your Query Here"
              size="22"
            />
          </td>
        </tr>
        <tr>
          <td>
            <input id="submit" type="submit" value="Submit" />
            &nbsp;&nbsp;&nbsp;
          </td>
          <td><input id="reset" type="reset" value="Cancel" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
