<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <xsl:output method="xml" version="1.0" encoding="UTF-8" indent="yes">
      <table border="1">
        <tr bgcolor="#9acd32">
          <th style="text-align:left">Date</th>
          <th style="text-align:left">Topic Description</th>
        </tr>

        <tr>
          <xsl:for-each select="/channel/items">

            <a>
              <td>
                <xsl:value-of select="item"/>
                <xsl:value-of select="link"/>
              </td>
            </a>

            <td>
              <xsl:value-of select="pubdate"/>
            </td>

            <td>
              <xsl:value-of select="artist"/>
            </td>

          </xsl:for-each>
        </tr>

      </table>

    </xsl:template>
  </xsl:stylesheet>

