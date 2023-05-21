<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
 <html>
    <head>
        <style>
            h2
            {
                text-align:center;
                <!--text-color:#ffe6e6;-->
            }
            table
            {
                text-align: center;
                margin-bottom :150px;
                margin-top:100px;
            }
            
        </style>

    </head>
 <body>
  <h1 align="center">Student's Basic Details</h1>
   <table border="3" align="center"  bgcolor="#ffe6e6">
   <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Branch</th>
    <th>Age</th>
    <th>City</th>
    <th>Class</th>
   </tr>

<xsl:for-each select="class/student">
<xsl:sort select="city"/>
<xsl:sort select="age"/>
<xsl:if test="age &gt; 15">

<tr>
<td><xsl:value-of select="@id"/></td>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="branch"/></td>
<td><xsl:value-of select="age"/></td>

<xsl:choose>
<xsl:when test="age &gt; 18">
    
    <td bgcolor="#346eeb">
        <xsl:value-of select="age"/>
    </td>
</xsl:when>

<xsl:otherwise>
    <td><xsl:value-of select="age"/></td>
</xsl:otherwise>
</xsl:choose>


<td><xsl:value-of select="city"/></td>
</tr>
</xsl:if>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
