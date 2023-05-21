<?xml version = "1.0" encoding = "UTF-8"?>  
<xsl:stylesheet version = "1.0">  
   xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">     
   <xsl:template match = "/" >  
      <html>  
         <body>    
            <xsl:value-of select = "/class/employee/preceding-sibling::comment()"/>  
            <br/>  
            <xsl:text>First Employee: </xsl:text>  
            <xsl:value-of select = "/class/employee/child::firstname" />      
         </body>  
      </html>  
   </xsl:template>  
</xsl:stylesheet>  