import cv2
import sys

img1=cv2.imread(sys.argv[1])
img2=cv2.imread(sys.argv[2])

img1=cv2.resize(img1,(200,200))
img2=cv2.resize(img2,(200,200))

diff=cv2.absdiff(img1,img2)

score=100-diff.mean()

print(score)