<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style>
                    /* CSS styles */
                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }
                    th, td {
                        border: 1px solid black;
                        padding: 8px;
                        text-align: left;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                </style>
            </head>
            <body>
                <h1>Student Information</h1>
                <table>
                    <tr>
                        <th>USN</th>
                        <th>Name</th>
                        <th>College</th>
                        <th>Branch</th>
                        <th>Year of Joining</th>
                        <th>Email</th>
                    </tr>
                    <xsl:for-each select="students/student">
                        <tr>
                            <td><xsl:value-of select="USN"/></td>
                            <td><xsl:value-of select="Name"/></td>
                            <td><xsl:value-of select="College"/></td>
                            <td><xsl:value-of select="Branch"/></td>
                            <td><xsl:value-of select="YearOfJoining"/></td>
                            <td><xsl:value-of select="Email"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
