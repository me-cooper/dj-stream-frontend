# DJ-Stream Frontend



This is a template if you want to mix music to public. I use Virtual DJ with this.



---



Demo: https://technobunker.club



---



## Customization

Just add GIFs as needed inside `./gifs`

Should be named as numbers from `1.gif` to `10.gif` (last number)  **gapless**.

These images will be displayed in the background automatically.



Add in your stream title and your stream URL inside `index.html` in the `<script>` part.

```javascript
let streamTitle = 'STREAM TITLE HERE';
let streamURL = 'https://your-stream-url-here.com';
```



Change the image update interval inside `index.html` in the `<script>` part.

```javascript
let changeImageInterval = 2500;
```



Have fun.