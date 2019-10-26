
// hides the content in "show more" sections when the page is first loaded
$(".div-hidden-expandable").hide()


// if the layout changes, swap .next() for .siblings('.div-hidden-expandable')
$('.label-expand').click(x => {

  // prevents going to the top of the page when links with href="#" are clicked
  x.preventDefault()

  // toggles the 'expand/hide' icon
  $(x.currentTarget).children('i').text() == 'expand_more' ?
    $(x.currentTarget).children('i').text('expand_less')   :
    $(x.currentTarget).children('i').text('expand_more')

  // toggle content visibility
  $(x.currentTarget).next().slideToggle(170)
})


// used for "show more" links
$('.a-expand').click(x => {
  x.preventDefault()
  $(x.currentTarget).parent().next().toggle(0)
})