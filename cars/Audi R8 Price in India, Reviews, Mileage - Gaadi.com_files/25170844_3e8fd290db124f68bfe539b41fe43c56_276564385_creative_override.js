(function() {
  var creativeDefinition = {
    customScriptUrl: '',
    isDynamic: false,
    delayedImpression: false,
    standardEventIds: {
      DISPLAY_TIMER: '2',
      INTERACTION_TIMER: '3',
      INTERACTIVE_IMPRESSION: '4',
      FULL_SCREEN_VIDEO_PLAYS: '5',
      FULL_SCREEN_VIDEO_COMPLETES: '6',
      FULL_SCREEN_AVERAGE_VIEW_TIME: '7',
      MANUAL_CLOSE: '8',
      BACKUP_IMAGE_IMPRESSION: '9',
      EXPAND_TIMER: '10',
      VIDEO_PLAY: '11',
      VIDEO_VIEW_TIMER: '12',
      VIDEO_COMPLETE: '13',
      VIDEO_INTERACTION: '14',
      VIDEO_PAUSE: '15',
      VIDEO_MUTE: '16',
      VIDEO_REPLAY: '17',
      VIDEO_MIDPOINT: '18',
      FULL_SCREEN_VIDEO: '19',
      VIDEO_STOP: '20',
      VIDEO_UNMUTE: '149645',
      FULL_SCREEN: '286263',
      DYNAMIC_CREATIVE_IMPRESSION: '536393',
      HTML5_CREATIVE_IMPRESSION: '871060'
    },
    exitEvents: [
      {
        name: 'ClickTag',
        reportingId: '1421731',
        url: 'https://www.chevrolet.co.in/beat-fuel-efficient-car.html?cmp\x3dOLA-Alwayson-beat-gaadi-300x250-Oct2013',
        targetWindow: '_blank',
        windowProperties: ''
      },
      {
        name: 'bookatestdrive',
        reportingId: '1581514',
        url: 'https://www.chevrolet.co.in/book-a-test-drive.html?cmp\x3dOLA-Alwayson-beat-td-gaadi-300x250-Oct2013',
        targetWindow: '_blank',
        windowProperties: ''
      },
      {
        name: 'requestaquote',
        reportingId: '1667762',
        url: 'https://www.chevrolet.co.in/request-a-quote.html?cmp\x3dOLA-Alwayson-beat-raq-gaadi-300x250-Oct2013',
        targetWindow: '_blank',
        windowProperties: ''
      }
    ],
    timerEvents: [
    ],
    counterEvents: [
      {
        name: 'Replay',
        reportingId: '1393582',
        videoData: null
      }
    ],
    childFiles: [
      {
        name: '300x250.jpg',
        url: '/ads/richmedia/studio/5160651/25168283_20131001040611984_300x250.jpg',
        isVideo: false
      }
    ],
    videoFiles: [
    ],
    videoEntries: [
    ],
    primaryAssets: [
      {
        id: '25169831',
        artworkType: 'FLASH',
        displayType: 'BANNER',
        width: '300',
        height: '250',
        servingPath: '/ads/richmedia/studio/5160651/25168283_20131001040552626_Beat_300x250.swf',
        zIndex: '1000000',
        customCss: '',
        flashArtworkTypeData: {
          actionscriptVersion: '2',
          wmode: 'opaque',
          sdkVersion: '2.3.0'
        },
        htmlArtworkTypeData: null,
        floatingDisplayTypeData: null,
        expandingDisplayTypeData: null,
        pageSettings:null,
        layoutsConfig: null
      }
    ]
  }
  var rendererDisplayType = '';
  rendererDisplayType += 'flash_';
  var rendererFormat = 'inpage';
  var rendererName = rendererDisplayType + rendererFormat;

  var creativeId = '56002770';
  var adId = '276564385';
  var templateVersion = '200_29';
  var studioObjects = window['studioV2'] = window['studioV2'] || {};
  var creativeObjects = studioObjects['creatives'] = studioObjects['creatives'] || {};
  var creativeKey = [creativeId, adId].join('_');
  var creative = creativeObjects[creativeKey] = creativeObjects[creativeKey] || {};
  creative['creativeDefinition'] = creativeDefinition;
  var adResponses = creative['adResponses'] || [];
  for (var i = 0; i < adResponses.length; i++) {
    adResponses[i].creativeDto && adResponses[i].creativeDto.csiEvents &&
        (adResponses[i].creativeDto.csiEvents['pe'] =
            adResponses[i].creativeDto.csiEvents['pe'] || (+new Date));
  }
  var loadedLibraries = studioObjects['loadedLibraries'] = studioObjects['loadedLibraries'] || {};
  var versionedLibrary = loadedLibraries[templateVersion] = loadedLibraries[templateVersion] || {};
  var typedLibrary = versionedLibrary[rendererName] = versionedLibrary[rendererName] || {};
  if (typedLibrary['bootstrap']) {
    typedLibrary.bootstrap();
  }
})();
