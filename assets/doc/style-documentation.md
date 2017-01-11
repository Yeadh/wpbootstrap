<!-- Overview section -->
<h2  id="overview" class="paragraph  paragraph__title" markdown='1'> Overview </h2>

This library adopt [sass-lang](http://sass-lang.com/) and the [BEM Metodology](https://en.bem.info/)(Block, Element, Modifier). For all the elements are applied this properties:

1. `box-sizing: border-box`
2. `font-smoothing: antialiased`
3. `text-rendering: optimizeLegibility`
4. `outline: none`

If this can cause any issues in your style, try to modify them from the top of `_base.css` partial file.
This framework has by default the `body` tag with `max-width` set to 1400px and `padding` set to 1.55em. If you want a full size page you can modify the `_base.ccs`.


<!-- BEM METHODOLOGY SECTION -->
<h2  id="bem" class="paragraph  paragraph__title" markdown='1'>BEM Metodology</h2>

BEM metodology is great! You can look at the [official doc](https://en.bem.info/) for more information or documentation. To use BEM methodology inside this framework is possible to use the constructor [element](https://en.bem.info/methodology/key-concepts/#element), [subElement](https://en.bem.info/methodology/faq/#a-block-or-an-element-when-should-i-use-which) and [modifier](https://en.bem.info/methodology/key-concepts/#modifier). Through a mixins for BEM you can create your own `element`, `SubElement` or `modifier` using the sintax below.

<h3 class="paragraph--sub" markdown="1">Element</h3>
<div class="fwtab"  markdown="1">
<div class="fwtab__example" markdown="1">
<pre class="pre-white">
.menu{
    @include element('item'){ 
         width: 100px;
         color: #ccc;
    }
}
</pre>

</div>
<div class="fwtab__code" markdown="1">
```
@include element('element-name'){ 
    //css properties here 
}
```
</div>
</div><!-- end .fwtab -->

<h3 class="paragraph--sub">SubElement</h3>

<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">
<pre class="pre-white">
.menu{
    @include element('block1'){ 
         width: 100px;
         color: #ccc;
         @include subElement('block2'){
            background: #ccc;
         }
    }
}
</pre>
</div>
<div class="fwtab__code" markdown="1">
```
@include subElement('subElement-name'){ 
    //css properties here 
}
```
</div>
</div><!-- end .fwtab -->


<h3 class="paragraph--sub">Modifier</h3>

<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">
<pre class="pre-white">
.menu{
    @include element('block1'){ 
         width: 100px;
         padding: 10px
         @include subElement('last'){
            padding: 0;
         }
    }
}
</pre>
</div>
<div class="fwtab__code" markdown="1">
```
@include modifier('modifier-name'){ 
    //css properties here 
}
```
</div>
</div><!-- end .fwtab -->


<!-- GRID SYSTEM SECTION -->

<h2  id="grid-system" class="paragraph  paragraph__title" markdown='1'>Grid system</h2>

The grid used inside sass partials files is [Susy Grid](http://susy.oddbird.net/) for more information about this grid take a look at susy doc.


<!-- TYPOGRAPHY SECTION -->

<h2  id="typography" class="paragraph  paragraph__title" markdown='1'>Typography</h2>

<h3 class="paragraph--sub">Headings</h3>

<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">

# h1.Header

## h2.Header two

### h3.Header three

#### h4.Header four

##### h5.Header five

###### h6.Header six
</div>
<div class="fwtab__code" markdown="1">

```
<h1>h1.Header one</h1> 
<h2>h2.Header two</h2>
<h3>h3.Header three</h3>
<h4>h4.Header four</h4>
<h5>h5.Header five</h5>
<h6>h6.Header six</h6>
```

</div>
</div><!-- end .fwtab -->

{: .paragraph--sub}
### Alignment class
<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">

<p class="text--left">text on left</p>

<p class="text--center">text on center</p>

<p class="text--right">text on right</p>

<p class="text--justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio necessitatibus ipsum laborum perspiciatis delectus sit dolores, consectetur nobis omnis saepe, alias numquam optio nam dignissimos est quidem sint beatae, officia earum praesentium? Obcaecati optio, doloribus error ad officia atque fugit fugiat ipsa perspiciatis eveniet saepe? Alias voluptatem blanditiis in excepturi labore ipsum voluptatum sequi hic vitae a nihil quis similique iusto quas perspiciatis, odit deserunt facilis fugit incidunt molestias, veniam at maxime. </p>


</div>
<div class="fwtab__code" markdown="1">

```
<p class="text--left"> 
<p class="text--center">
<p class="text--right">
<p class="text--justify">
```

</div>
</div><!-- end .fwtab -->

{: .paragraph--sub}

### Transformation classes

<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">

<p class="text--lowercase">lowercased text</p> 
<p class="text--uppercase">Uppercased text</p> 
<p class="text--capitalize">Capitlized text</p>

</div>
<div class="fwtab__code" markdown="1">

```
<p class="text--lowercase">lowercased text</p> 
<p class="text--uppercase">Uppercased text</p> 
<p class="text--capitalize">Capitlized text</p>
```

</div>
</div><!-- end .fwtab -->

{: .paragraph--sub}
### list items
<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">
**Unstyled list**

{: .list--unstyled}
- item one 
- item two
- item three


</div>
<div class="fwtab__code" markdown="1">

```
<ul class="list--unstyled"> 
    <li class="list--inline">...</li> 
    <li class="list--inline">...</li> 
<ul>
```

</div>
</div><!-- end .fwtab -->

<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">

**List inline**

<ul class="list--unstyled">
    <li class="list--inline push--right">item one</li>
    <li class="list--inline push--right">item two</li>
    <li class="list--inline">item three</li>
</ul>

</div>
<div class="fwtab__code" markdown="1">

```
<ul class="list--unstyled">
  <li class="list--inline">...</li> 
  <li class="list--inline">...</li> 
<ul>
```

</div>
</div><!-- end .fwtab -->



<!-- IMAGE SECTION -->

<h2  id="images" class="paragraph  paragraph__title" markdown='1'>Images</h2>

Images can be made responsive using `.img--responsive`.




<!-- CODE SECTION -->

{: #code .paragraph .paragraph__title}
## Code

{: .paragraph--sub}
### Inline Code
For code use inside html the `code` tag as the following:
<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">
You will obtain this style of code: `code style word`.

Use the class `.code--white` to remove the grey background from code elements.
</div>
<div class="fwtab__code" markdown="1">

```
<code>code words</code> 
<code class="code--white">This code section have white background</code>
```

</div>
</div><!-- end .fwtab -->



{: .paragraph--sub}
### Block Code
For multiline code elements use the pre tag, the code will be styled fore exemple like the following one:
<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">

```
.className {
  position: absolute;
  background-color: #fff;
}
```

</div>
<div class="fwtab__code" markdown="1">

```
<pre> ... </pre>
```

</div>
</div><!-- end .fwtab -->





<!-- TABLES SECTION -->

{: #tables .paragraph .paragraph__title}
## Tables

work in progress ...



<!-- FORMS SECTION -->

{: #forms .paragraph .paragraph__title}
## Forms

work in progress ...


<!-- BUTTONS SECTION -->

{: #buttons .paragraph .paragraph__title}
## Buttons

work in progress ...




<!-- HELPERS SECTION -->


{: #helpers .paragraph .paragraph__title}
## Helpers


{: .paragraph--sub}
### Float properties
<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">

{: .float--right}
Floating element on the **right**

{: .float--none}
Floating element **none**

</div>
<div class="fwtab__code" markdown="1">

```
<div class="float--left">div content</div> 
<div class="float--right">div content</div> 
<div class="float--none">div content</div>
```

</div>
</div><!-- end .fwtab -->

{: .paragraph--sub}
### Push elements

Add or remove margins with a base spacing unit with the following classes:

{: .push-half--top}

|Class	        | Function |
|---------------|----------|
|`.push`	    | Push the element in all four directions
|`.push--top`	| Push element down from the top
|`.push--bottom`| Push down the content under the element
|`.push--right`	| Push the element to the right
|`.push--left`	| Push the element to the left
|`.push--ends`	| Push up and down the content above and under the element
|`.push--sides`	| Push left and right the content on the left and on the right of element

To reduce the margin space betwen the elements use `half` after `.push` and to add more space use `double` as showed below.

<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">

element with **no style**

{: .push--left}
element with **push left**

{: .push-double--left}
element with **push double left**


</div>
<div class="fwtab__code" markdown="1">

```
<div class="push">...</div> 
<div class="push--top">...</div>
<div class="push--bottom">...</div>
<div class="push--left">...</div>
<div class="push--right">...</div>
<div class="push--ends">...</div>
<div class="push--sides">...</div> 

<div class="push-half">...</div> 
<div class="push-half--top">...</div>
<div class="push-half--bottom">...</div>
<div class="push-half--left">...</div>
<div class="push-half--right">...</div>
<div class="push-half--ends">...</div>
<div class="push-half--sides">...</div>

<div class="push-double">...</div> 
<div class="push-double--top">...</div>
<div class="push-double--bottom">...</div>
<div class="push-double--left">...</div>
<div class="push-double--right">...</div>
<div class="push-double--ends">...</div>
<div class="push-double--sides">...</div>
```
</div>
</div><!-- end .fwtab -->

{: .paragraph--sub}
### Flush elements

`.flush` can be used to restore an elment's margins.

{: .push-half--top}

|Class	            | Function 
|-------------------|----------|
|`.flush`	        | Restore margin the element in for all sides
|`.flush--top`	    | Restore margin to the top
|`.flush--bottom`   | Restore margin to the bottom
|`.flush--right`    | Restore margin to the right
|`.flush--left`	    | Restore margin to the left
|`.flush--ends`	    | Restore margin up and down
|`.flush--sides`	| Restore margin to the left and right

<div class="fwtab" markdown="1">
<div class="fwtab__example" markdown="1">

{: .push-double--left}
elment with **right margins**

{: .flush--right}
elment with **flush right**

</div>
<div class="fwtab__code" markdown="1">

```
<div class="flush">...</div> 
<div class="flush--top">...</div>
<div class="flush--bottom">...</div>
<div class="flush--left">...</div>
<div class="flush--right">...</div>
<div class="flush--ends">...</div>
<div class="flush--sides">...</div>
```
</div>
</div><!-- end .fwtab -->



<!-- RESPONSIVE SECTION -->


{: #responsive .paragraph .paragraph__title}
## Responsive

work in progress ...




<div id="draft" class="draft">
    <div class="draft__content">
        <a id="closeDraft" class="float--right" href="#"><i class="fa fa-times-rectangle"></i></a>
        <h4><i class="fa fa-pencil-square-o"></i> Draft</h4>
        <p>This page is not complete.</p>
    </div>
</div>