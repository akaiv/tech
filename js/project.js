(function ($) {
  'use strict';

  // 실행: 툴팁 표시
  $('[data-toggle="tooltip"]').tooltip()

  // 변수
  var $archiveItem = $('.list-monthly li')
  var itemLinkMaxWidth = 0
  var itemIndicatorMaxCount = 0

  // 함수: DOM에서 텍스트 노드만 추출한 후 텍스트 앞뒤 글자 자른 값 반환 (정수)
  function getCountNumber(element) {
    var countNumber = element
      .clone()
      .children()
        .remove()
      .end()
      .text()
        .slice(2, -1)
    return parseInt(countNumber, 10)
  }

  // 함수: DOM에서 텍스트 노드를 제거하기
  function removeTextNode(element) {
    return element
      .contents()
      .filter(function () {
        return this.nodeType === 3
      })
        .remove()
  }

  // 함수: 인디케이팅을 위해 가상의 DOM들을 추가하며, 항목의 넓이를 재고 data 설정
  function appendIndicator(element, postCount) {
    var $indicator = '<div class="item-indicator"></div>'
    element
      .wrapInner('<section class="item-link"></section>')
      .data('postCount', postCount)
    element.append($indicator.repeat(postCount))
    var itemLinkWidth = element.find('.item-link').outerWidth()
    itemLinkMaxWidth = Math.max(itemLinkMaxWidth, itemLinkWidth)
  }

  // 함수: 항목 전체를 클릭 가능하게 만들기
  function clickableElement(element) {
    var $href = element.find('a').attr('href')
    element.data('href', $href)
    element.addClass('clickable').click(function () {
      window.location = element.data('href')
    })
  }

  // 실행: 월별 보관함의 최대 넓이와 최대 개수 얻기, DOM 조작
  $archiveItem.each(function () {
    var $item = $(this).addClass('item')
    var itemIndicatorCount = getCountNumber($item)
    itemIndicatorMaxCount = Math.max(itemIndicatorMaxCount, itemIndicatorCount)
    removeTextNode($item)
    appendIndicator($item, itemIndicatorCount)
    clickableElement($item)
  })

  // 실행: 최대 넓이를 기반으로 링크에 스타일 부여
  $archiveItem.each(function () {
    var $item = $(this)
    $item.find('.item-link').width(itemLinkMaxWidth + 10)
  })
})(jQuery);
