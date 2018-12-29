#include "isogram.h"

bool is_isogram(const char phrase[]) {
    
    if (phrase == NULL)
        return false;
    
    char letters[26] = {0};

    for(size_t i = 0; phrase[i] != '\0' ; i++)
    {
        if (phrase[i] >= 'a' && phrase[i] <= 'z') {
            if (letters[phrase[i] - 'a'] != 0) {
                return false;
            } else {
                letters[phrase[i] - 'a'] = phrase[i];
            }    
        }

        if (phrase[i] >= 'A' && phrase[i] <= 'Z') {
            if (letters[phrase[i] - 'A'] != 0) {
                return false;
            } else {
                letters[phrase[i] - 'A'] = phrase[i];
            }    
        }  
    }
    return true;
}