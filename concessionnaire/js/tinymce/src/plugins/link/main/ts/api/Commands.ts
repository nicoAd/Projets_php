/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 */

import Actions from '../core/Actions';
import Settings from './Settings';

const register = function (editor) {
  editor.addCommand('mceLink', () => {
    if (Settings.useQuickLink(editor.settings)) {
      // Taken from ContextEditorEvents in silver. Find a better way.
      editor.fire('contexttoolbar-show', {
        toolbarKey: 'link-form'
      });
    } else {
      Actions.openDialog(editor)();
    }
  });
};

export default {
  register
};