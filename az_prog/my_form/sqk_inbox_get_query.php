http://stackoverflow.com/questions/5623654/returning-distinct-values-in-either-column-x-or-y-in-mysql


SELECT X.senderid, X.msgmatter, X.send_date FROM (SELECT senderid, msgmatter, send_date FROM `messages` WHERE receiverid=3 ORDER BY senderid DESC, send_date DESC ) AS X GROUP BY X.senderid 