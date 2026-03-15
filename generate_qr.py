import qrcode
import sys

item_id=sys.argv[1]

url="http://localhost/lostfound-project/claim.php?id="+item_id

img=qrcode.make(url)

img.save("uploads/qr_"+item_id+".png")